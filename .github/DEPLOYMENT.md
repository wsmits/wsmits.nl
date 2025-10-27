# GitHub Actions Deployment Setup

This project is configured to automatically deploy to production using GitHub Actions and Deployer.

## Required GitHub Secrets

You need to configure the following secrets in your GitHub repository:

1. Go to your GitHub repository
2. Navigate to **Settings** > **Secrets and variables** > **Actions**
3. Click **New repository secret** for each of the following:

### Secrets to Configure

- **SSH_PRIVATE_KEY**: Your SSH private key for accessing the server
  - Generate or use existing SSH key pair
  - Copy the entire private key (including `-----BEGIN ... KEY-----` and `-----END ... KEY-----`)
  - Keep the public key on your server in `~/.ssh/authorized_keys`

- **SSH_HOST**: `wsmits.nl`
  - Your server hostname

- **SSH_USER**: `u133344p128218`
  - Your SSH username on the server

- **SSH_PORT**: `22` (or `7685` if using custom port)
  - The SSH port to connect to

- **DOT_ENV** (optional): Your production `.env` file contents
  - Only if you want to manage `.env` through GitHub
  - Otherwise, ensure `.env` exists on your server in the shared directory

## How to Deploy

### Automatic Deployment
The workflow automatically runs when you push to the `master` branch:
```bash
git push origin master
```

### Manual Deployment
You can also trigger deployment manually:
1. Go to your GitHub repository
2. Click on **Actions** tab
3. Select **Deploy to Production** workflow
4. Click **Run workflow** button
5. Choose the branch and click **Run workflow**

## What Happens During Deployment

1. Code is checked out from GitHub
2. PHP 8.2 and Node.js 20 are set up
3. Composer dependencies are installed (production only)
4. NPM dependencies are installed
5. Frontend assets are built using Vite
6. SSH connection is established to your server
7. Deployer runs the deployment process:
   - Clears caches
   - Runs database migrations
   - Creates storage symlink
   - Switches to new release

## Troubleshooting

### SSH Connection Issues
- Verify your SSH_PRIVATE_KEY is correct and has no extra spaces
- Check that the public key is in `~/.ssh/authorized_keys` on your server
- Ensure SSH_PORT is correct (usually 22 or 7685)

### Deployment Failures
- Check the Actions logs in GitHub for detailed error messages
- Verify your server has enough disk space
- Ensure the deploy path `/home/u133344p128218/wsmits.nl` exists and is writable

### Build Failures
- Ensure all dependencies are correctly specified in composer.json
- Check that package.json has the correct build script
