<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Addressbook from '@/Pages/Contacts/Partials/Addressbook.vue';
const props = defineProps({
    addressbooks: Object,
});
</script>

<template>
    <AppLayout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Addressbook v-for="addressbook in props.addressbooks" :key="addressbook.id" :addressbook="addressbook"></Addressbook>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
