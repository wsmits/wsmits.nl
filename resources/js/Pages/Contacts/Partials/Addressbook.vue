<script setup>
import ContactCard from '@/Pages/Contacts/Partials/ContactCard.vue';
const props = defineProps({
    addressbook: Object,
});
</script>

<template>
    <div class="container my-12 mx-auto px-4 md:px-12">
        {{props.addressbook.name}}
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 p-6 gap-8">
                <ContactCard v-for="contact in props.addressbook.contacts" :key="contact.id" :contact="contact"></ContactCard>
            </div>
        </div>
    </div>
</template>
