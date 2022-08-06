<script>
import { mapState, mapActions } from 'pinia'
import { useReportStore } from '../stores/report'
import { BASE_URL } from '../base_url';
export default {
    name: "detailView",
    components: {

    },
    data() {
        return {
            name: "",
            sex: "",
            religion: "",
            phone: "",
            address: "",
            nik: "",
        }
    }
    ,
    computed: {
        ...mapState(useReportStore, [`reportFetched`])
    },
    methods: {
        selectedFile(event) {
            this.file = event.target.files[0]
            console.log(this.file)
        },
        ...mapActions(useReportStore, [`editHandler`]),
        async editHandler1() {
            let id = this.$route.params.id
            this.editHandler({
                name: this.name,
                sex: this.sex,
                religion: this.religion,
                phone: this.phone,
                address: this.address,
                nik: this.nik,
            }, id)

        },
        async fetchById() {
            try {
                let id = this.$route.params.id
                let response = await axios({
                    method: `GET`,
                    url: 'http://localhost:8000/' + `api/patients/${id}`
                })
                console.log(response.data.result)
                this.name = response.data.result.name
                this.sex = response.data.result.sex
                this.religion = response.data.result.religion
                this.phone = response.data.result.phone
                this.address = response.data.result.address
                this.nik = response.data.result.nik
            } catch (err) {
                console.log(err)
            }
        },
    },
    created() {
        this.fetchById()
    }

}
</script>

<template>
    <body>
        <div class="bg-gray-100">
            <div class="max-w-screen-xl mx-auto">
                <main class="mt-0 mx-auto pt-5">
                    <h1 class="text-4xl font-bold pb-5 text-center">Patient Detail</h1>

                    <div class="mx-auto w-full max-w-[550px] bg-white p-5 rounded-lg border">
                        <div>
                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    Name
                                </div>
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4">
                                    : {{ name }}
                                </div>
                            </div>

                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    NIK
                                </div>
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4">
                                    : {{ nik }}
                                </div>
                            </div>

                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    Gender
                                </div>
                                <div
                                    class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4 capitalize ">
                                    : {{ sex }}
                                </div>
                            </div>

                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    Religion
                                </div>
                                <div
                                    class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4 capitalize ">
                                    : {{ religion }}
                                </div>
                            </div>

                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    Phone Number
                                </div>
                                <div
                                    class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4 capitalize ">
                                    : {{ phone }}
                                </div>
                            </div>

                            <div class="mb-5 flex flex-row">
                                <div class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-1/4">
                                    Address
                                </div>
                                <div
                                    class="mb-3 block text-base font-medium text-[#07074D] flex-auto w-3/4 capitalize ">
                                    : {{ address }}
                                </div>
                            </div>

                            <div @click="$router.push(`/edit/${this.$route.params.id}`)"
                                class="px-4 py-1 text-lg text-white bg-blue-400 rounded text-center cursor-pointer mb-3 font-medium ">
                                Edit
                            </div>
                            <div @click="$router.push(`/`)"
                                class="px-4 py-1 text-lg text-white bg-green-400 rounded text-center cursor-pointer mb-3 font-medium ">
                                Return to Home
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