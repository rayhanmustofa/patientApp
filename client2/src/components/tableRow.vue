<script>
import { mapState, mapActions } from 'pinia'
import { useReportStore } from '../stores/report'

export default {
    name: "tableRow",
    props: {
        data: Object
    },
    data() {
        return {
            toggleModal: false,
            modalData: {}
        };
    },
    computed: {
    },
    methods: {
        ...mapActions(useReportStore, [`deleteHandler`]),
        toDetail() {
            this.$router.push(`/patients/${this.data.id}`)
        },
        toEdit() {
            this.$router.push(`/edit/${this.data.id}`)
        },
        toDelete() {
            this.deleteHandler(this.data.id)
        },
    }
}
</script>

<template>
    <div v-if="toggleModal"
        class="fixed overflow-x hidden oferflow-y auto inset-0 flex justify-center items-center z-50">
        <div class="">
            <div class="">
                <div class="">Patient Detail</div>
                <span> {{ data.address }}</span>
                <button class="" @click.prevent="toggleModal = false">Close</button>
            </div>
        </div>
    </div>
    <tr class="whitespace-nowrap">
        <td class="px-6 py-4 text-sm text-gray-500">
            {{ data.nik }}
        </td>
        <td class="px-6 py-4">
            <div class="text-sm text-gray-900">
                {{ data.name }}
            </div>
        </td>
        <td class="px-6 py-4">
            <div class="text-sm text-gray-500 capitalize">{{ data.sex }}</div>
        </td>
        <td class="px-6 py-4 text-sm text-gray-500">
            {{ data.phone }}
        </td>
        <td class="px-6 py-4">
            <a @click.prevent="toDetail()" href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Detail</a>
            <a @click.prevent="toEdit()" href="#"
                class=" ml-2 px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
            <button @click.prevent="toDelete()"
                class=" ml-2 px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</button>
        </td>
    </tr>


</template>

<style scoped>
</style>