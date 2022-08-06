<script>

export default {
    name: "navbar",
    computed: {
    },
    methods: {
    },
}
</script>

<template>
    <header data-v-ffe520fa="" class="flex items-center justify-between py-2 border-b bg-white">
        <span class="text-xl uppercase font-bold text-black-800 pl-3">Patient App</span>
        <ul class="inline-flex items-center">
            <li class="px-2 md:px-4">
                <router-link to="/" class="cursor-pointer font-semibold hover:text-indigo-700 text-black-700">
                    Home
                </router-link>
            </li>
            <li class="px-2 md:px-4">
                <router-link to="/createPatient"
                    class="cursor-pointer font-semibold hover:text-indigo-700 text-black-700">
                    Create New Patient
                </router-link>
            </li>
        </ul>
    </header>


</template>

<style scoped>
</style>