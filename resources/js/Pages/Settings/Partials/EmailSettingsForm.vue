<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Link, useForm } from '@inertiajs/inertia-vue3';
import JetButton from '@/Jetstream/Button.vue';
import JetFormSection from '@/Jetstream/FormSection.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetInputError from '@/Jetstream/InputError.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetActionMessage from '@/Jetstream/ActionMessage.vue';
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue';

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    name: props.user.name,
    email: props.user.email,
    imaphost: props.user.imaphost,
    imapport: props.user.imapport,
    imapusername: props.user.imapusername,
    imappassword: props.user.imappassword,
    smtphost: props.user.smtphost,
    smtpport: props.user.smtpport,
    smtpusername: props.user.smtpusername,
    smtppassword: props.user.smtppassword
});

const updateEmailSettings = () => {
    form.post(route('settings.email.update'), {
        errorBag: 'updateEmailSettings',
        preserveScroll: true,
        onSuccess: () => whatOnSuccess(),
    });
};

const whatOnSuccess = () => {
   // Todo: what to do on success
};
</script>

<template>
    <JetFormSection @submitted="updateEmailSettings">
        <template #title>
            Email settings
        </template>

        <template #description>
            Setup your email account
        </template>

        <template #form>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="name" value="Name" />
                <JetInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="name"
                />
                <JetInputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="email" value="Email" />
                <JetInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.email" class="mt-2" />
            </div>

            <!-- IMAP host -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="imaphost" value="Imap host" />
                <JetInput
                    id="imaphost"
                    v-model="form.imaphost"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.imaphost" class="mt-2" />
            </div>

            <!-- IMAP port -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="imapport" value="Imap port" />
                <JetInput
                    id="imapport"
                    v-model="form.imapport"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.imapport" class="mt-2" />
            </div>

            <!-- IMAP username -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="imapusername" value="Imap username" />
                <JetInput
                    id="imapusername"
                    v-model="form.imapusername"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.imapusername" class="mt-2" />
            </div>

            <!-- IMAP password -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="imappassword" value="Imap password" />
                <JetInput
                    id="imappassword"
                    v-model="form.imappassword"
                    type="password"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.imappassword" class="mt-2" />
            </div>

            <!-- SMTP host -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="smtphost" value="Smtp host" />
                <JetInput
                    id="smtphost"
                    v-model="form.smtphost"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.smtphost" class="mt-2" />
            </div>

            <!-- SMTP port -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="smtpport" value="Smtp port" />
                <JetInput
                    id="smtpport"
                    v-model="form.smtpport"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.smtpport" class="mt-2" />
            </div>

            <!-- SMTP username -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="smtpusername" value="Smtp username" />
                <JetInput
                    id="smtpusername"
                    v-model="form.smtpusername"
                    type="text"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.smtpusername" class="mt-2" />
            </div>

            <!-- SMTP password -->
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="smtppassword" value="Smtp password" />
                <JetInput
                    id="smtppassword"
                    v-model="form.smtppassword"
                    type="password"
                    class="mt-1 block w-full"
                />
                <JetInputError :message="form.errors.smtppassword" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </JetButton>
        </template>
    </JetFormSection>
</template>
