<script setup>
const props = defineProps({
    contactInformation: Object,
});
</script>

<template>
    <div class="divide-y divide-gray-200">
        <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
            <div class="flex items-center">
                <button class="flex justify-center items-center text-sm border-2 border-transparent h-8 w-8 rounded-full focus:outline-none focus:border-gray-300 transition bg-gray-300 hover:bg-gray-400 mr-3">
                    <i v-if="props.contactInformation.type == 'email'" class="bx bxs-envelope"></i>
                    <i v-if="props.contactInformation.type == 'phone'" class="bx bxs-phone"></i>
                    <i v-if="props.contactInformation.type == 'mobile'" class="bx bxs-mobile"></i>
                    <i v-if="props.contactInformation.type == 'site'" class="bx bxs-window-alt"></i>
                </button>
                <div>
                    <h4 class="text-sm font-semibold text-gray-900">{{ props.contactInformation.type }}</h4>
                    <div class="text-[13px]">{{ props.contactInformation.value }}</div>
                </div>
            </div>
        </button>
    </div>
</template>
