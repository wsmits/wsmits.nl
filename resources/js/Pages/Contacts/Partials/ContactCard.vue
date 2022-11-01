<script setup>
import ContactInformation from '@/Pages/Contacts/Partials/ContactInformation.vue';
import ContactAddress from '@/Pages/Contacts/Partials/ContactAddress.vue';
const props = defineProps({
    contact: Object,
});
</script>

<template>
    <div class="relative overflow-hidden max-w-[300px] min-w-[300px] mx-auto bg-white shadow-lg rounded-lg">
        <!-- Card header -->
        <header class="pt-6 pb-1 px-5 border-b border-gray-200">
            <div class="flex justify-between items-center mb-3">
                <!-- Image + name -->
                <div class="flex items-center">
                    <a class="inline-flex items-start mr-3" href="#0">
                        <img class="rounded-full border-solid border-2" :class="props.contact.gender == 'M' ? 'border-blue-400' : props.contact.gender == 'F' ? 'border-pink-400' : 'border-grey-400'" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-48-01_nugblk.jpg" width="48" height="48" alt="{{props.contact.first_name}} {{props.contact.middle_name}} {{props.contact.last_name}}" />
                    </a>
                    <div class="pr-1">
                        <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                            <h2 class="text-xl leading-snug font-bold">{{props.contact.first_name}} {{props.contact.middle_name}} {{props.contact.last_name}}</h2>
                        </a>
                    </div>
                </div>
                <!-- Settings button -->
                <div class="relative inline-flex flex-shrink-0">
                    <button class="flex justify-center items-center text-sm border-2 border-transparent h-8 w-8 rounded-full focus:outline-none focus:border-gray-300 transition bg-gray-300 hover:bg-gray-400">
                        <i class="bx bxs-pencil"></i>
                    </button>
                </div>
            </div>
        </header>

        <div class="py-3 px-5">
            <h3 class="text-xs font-semibold uppercase text-gray-400 mb-1">Information</h3>
                <contactInformation v-for="contactInformation in props.contact.contact_information" :key="contactInformation.id" :contactInformation="contactInformation"></contactInformation>
        </div>

        <div class="py-3 px-5">
            <h3 class="text-xs font-semibold uppercase text-gray-400 mb-1">Addresses</h3>
            <contactAddress v-for="contactAddress in props.contact.contact_addresses" :key="contactAddress.id" :contactAddress="contactAddress"></contactAddress>
        </div>
    </div>
</template>
