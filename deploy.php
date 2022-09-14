<?php
namespace Deployer;

require_once 'recipe/common.php';

host('wsmits.nl')
    ->set('stage', 'production')
    ->set('deploy_path', '/home/u133344p128218/wsmits.nl');
//    ->stage('production')
//    ->user('u133344p128218')
//    ->port(7685)
//    ->set('deploy_path', '/home/u133344p128218/wsmits.nl2');

set('application', 'wsmits.nl');
//set('repository', 'git@github.com:wsmits/wsmits.nl.git');
set('repository', 'https://github.com/wsmits/wsmits.nl.git');



// [Optional] Allocate tty for git clone. Default value is false.
set('writable_use_sudo', false); // Using sudo in writable commands?
set('writable_mode', 'chmod'); // chmod, chown, chgrp or acl.
set('clear_use_sudo', false);    // Using sudo in clean commands?
set('cleanup_use_sudo', false); // Using sudo in cleanup commands?
set('allow_anonymous_stats', false);

set('ssh_multiplexing', false);

// Laravel shared dirs
set('shared_dirs', [
    'storage',
]);

// Laravel shared file
set('shared_files', [
    '.env',
]);

// Laravel writable dirs
set('writable_dirs', [
    'bootstrap/cache',
    'storage/logs',
    'storage/framework',
]);

set('clear_paths', [
    'storage/framework/views/twig/*',
]);
/**
 * Helper tasks
 */
desc('Disable maintenance mode');
task('artisan:up', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan up; fi');
    writeln('<info>' . $output . '</info>');
});

desc('Enable maintenance mode');
task('artisan:down', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan down; fi');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan migrate');
task('artisan:migrate', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate --force');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan migrate:fresh');
task('artisan:migrate:fresh', function () {
    run('{{bin/php}} {{release_path}}/artisan migrate:fresh --force');
});

desc('Execute artisan migrate:rollback');
task('artisan:migrate:rollback', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:rollback --force');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan migrate:status');
task('artisan:migrate:status', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:status');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan db:seed');
task('artisan:db:seed', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan db:seed --force');
    writeln('<info>' . $output . '</info>');
    $output = run('{{bin/php}} {{release_path}}/artisan db:seed --class=PermissionsSeeder');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan cache:clear');
task('artisan:cache:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan cache:clear');
});

desc('Execute artisan config:cache');
task('artisan:config:cache', function () {
    run('{{bin/php}} {{release_path}}/artisan config:cache');
});

desc('Execute artisan route:cache');
task('artisan:route:cache', function () {
    run('{{bin/php}} {{release_path}}/artisan route:cache');
});

desc('Execute artisan view:clear');
task('artisan:view:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan view:clear');
});

desc('Execute artisan queue:restart');
task('artisan:queue:restart', function () {
    run('{{bin/php}} {{release_path}}/artisan queue:restart');
});

desc('Execute artisan horizon:terminate');
task('artisan:horizon:terminate', function () {
    run('{{bin/php}} {{release_path}}/artisan horizon:terminate');
});

desc('Execute artisan horizon:purge');
task('artisan:horizon:purge', function () {
    run('{{bin/php}} {{release_path}}/artisan horizon:purge');
});

desc('Execute artisan storage:link');
task('artisan:storage:link', function () {
    run('{{bin/php}} {{release_path}}/artisan storage:link');
});

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    try {
        run('echo "" | sudo /usr/sbin/service php7.4-fpm reload');
    } catch (\Deployer\Exception\RuntimeException $e) {
    }
});

desc('Execute artisan app:notify-slack');
task('app:notify-slack', function () {
    run('{{bin/php}} {{release_path}}/artisan app:notify-slack');
});

/**
 * Main task
 */
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:view:clear',
    'artisan:cache:clear',
    'artisan:config:cache',
    'artisan:route:cache',
    'artisan:storage:link',
    'artisan:migrate',
    'deploy:symlink',
//    'artisan:horizon:terminate',
    'deploy:unlock',
    'deploy:cleanup',
]);

after('deploy', 'deploy:success');
after('deploy:failed', 'deploy:unlock');
