<script>
import { mapState, mapActions } from 'pinia'
import { useReportStore } from '../stores/report'
import tableRow from "../components/tableRow.vue";

export default {
    name: "homeView",
    components: {
        tableRow
    },
    computed: {
        ...mapState(useReportStore, [`reportFetched`]),
    },
    methods: {
        ...mapActions(useReportStore, [`fetchData`]),
        fetchData1() {
            this.fetchData()
        },

    },
    async created() {
        await this.fetchData()


    }

}
</script>

<template>

    <body>
        <div class="bg-gray-100">
            <div class="max-w-screen-xl mx-auto">
                <header class="flex items-center justify-between py-2 border-b "></header>
                <main class="mt-0 mx-auto pt-5 mb-3">
                    <h1 class="text-4xl font-bold pb-5 text-center">Patient Lists</h1>
                    <div class="container flex justify-center mx-auto">
                        <div class="flex flex-col">
                            <div class="w-full">
                                <div class="border-b border-gray-200 shadow mb-3">
                                    <table>
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    NIK
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Name
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Sex/Gender
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Phone
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <tableRow v-for="el in reportFetched" :data="el" />
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </main>
            </div>
        </div>
    </body>
</template>

<style scoped>
</style>