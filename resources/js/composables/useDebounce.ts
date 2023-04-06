import {useDebounceFn} from "@vueuse/core";
import {Ref, watch} from "vue";

export function useDebounce(value: any, switcher: Ref<boolean>) {
    const toggleShouldFetch = useDebounceFn(() => {
        switcher.value = !switcher.value
    }, 1000)

    watch(value, toggleShouldFetch)
}
