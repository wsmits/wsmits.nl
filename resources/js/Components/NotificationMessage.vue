<script setup>
import {getCurrentInstance, defineProps} from "vue";

const $date = getCurrentInstance().appContext.config.globalProperties.$date;

const props = defineProps({
    iconCls: { type: String, required: false, default: '' },
    dateTime: {type: String, required: false, default: '' }
});

function showIcon() {
    return props.iconCls !== '';
}

function showDateTime() {
    return props.dateTime !== '';
}

function formatDateTime() {
    let hoursToShowFromNow = 3;
    let givenDateTime = $date(props.dateTime);
    let now = $date();
    let diffHours = givenDateTime.diff(now,'h');

    if(diffHours < hoursToShowFromNow && diffHours > -hoursToShowFromNow) {
        return $date(props.dateTime).fromNow();
    } else {
        return $date(props.dateTime).format('DD-MM-YYYY HH:mm');
    }
}
</script>

<template>

    <div class="w-full p-3 mt-4 bg-white rounded shadow flex flex-shrink-0">
        <div v-if="showIcon()" tabindex="0" aria-label="group icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex flex-shrink-0 items-center justify-center"><i class="bx" :class="iconCls"></i></div>
        <div v-else tabindex="0" class="focus:outline-none w-8 h-8"></div>
        <div class="pl-3 w-full">
            <div class="flex items-center justify-between w-full">
                <p tabindex="0" class="focus:outline-none text-sm leading-none"><slot></slot></p>
                <div tabindex="0" aria-label="close icon" role="button" class="focus:outline-none cursor-pointer">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 3.5L3.5 10.5" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.5 3.5L10.5 10.5" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <p v-if="showDateTime()" tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">{{ formatDateTime() }}</p>
<!--            {{ $date(props.dateTime).fromNow() }}-->
        </div>
    </div>

</template>
