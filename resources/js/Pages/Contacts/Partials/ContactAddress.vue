<script setup>
const props = defineProps({
    contactAddress: Object,
});
</script>

<template>
    <div class="divide-y divide-gray-200">
        <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
            <div class="flex items-center">
                <button class="flex justify-center items-center text-sm border-2 border-transparent h-8 w-8 rounded-full focus:outline-none focus:border-gray-300 transition bg-gray-300 hover:bg-gray-400 mr-3">
                    <i v-if="props.contactAddress.type == 'home'" class="bx bxs-home"></i>
                    <i v-if="props.contactAddress.type == 'work'" class="bx bxs-building"></i>
                    <i v-if="props.contactAddress.type == 'other'" class="bx bxs-map-pin"></i>
                </button>
                <div>
                    <h4 class="text-sm font-semibold text-gray-900">{{ props.contactAddress.type }}</h4>
                    <div class="text-[13px]">{{ props.contactAddress.street }} {{ props.contactAddress.street2 }} <br> {{ props.contactAddress.zip_code }} {{ props.contactAddress.city }} <br> {{ props.contactAddress.country }}</div>
                </div>
            </div>
        </button>
    </div>
</template>
