<script>
import { mapState, mapActions } from 'pinia'
import { useReportStore } from '../stores/report'
import { BASE_URL } from '../base_url';
export default {
    name: "createView",
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
        ...mapActions(useReportStore, [`createHandler`]),
        async createHandler1() {
            // console.log(this.phone)
            if (!(+this.phone)) {
                swal('Incorrect Phone Number Format!')
            } else {
                this.createHandler({
                    name: this.name,
                    sex: this.sex,
                    religion: this.religion,
                    phone: this.phone,
                    address: this.address,
                    nik: this.nik,
                })
            }


        },

    }

}
</script>

<template>



    <body>
        <div class="bg-gray-100">
            <div class="max-w-screen-xl mx-auto">
                <header data-v-ffe520fa="" class="flex items-center justify-between py-2 border-b "></header>
                <main class="mt-0 mx-auto pt-5">
                    <h1 class="text-4xl font-bold pb-5 text-center">Create a New Patient</h1>

                    <div class="flex items-center justify-center p-12">
                        <div class="mx-auto w-full max-w-[550px]">
                            <form>
                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Name
                                    </label>
                                    <input v-model="name" type="text"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        NIK
                                    </label>
                                    <input v-model="nik" type="number"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Sex/Gender
                                    </label>
                                    <select
                                        class="form-select w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        v-model="sex">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Religion
                                    </label>
                                    <select
                                        class="form-select w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        v-model="religion">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Phone Number
                                    </label>
                                    <input v-model="phone" type="tel" pattern="[0-9]*"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div class="mb-5">
                                    <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Address
                                    </label>
                                    <textarea v-model="address" rows="2"
                                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                </div>
                                <div>
                                    <button @click.prevent="createHandler1()"
                                        class="hover:shadow-form rounded-md bg-blue-400 py-3 px-8 text-base font-semibold text-white outline-none">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>



                </main>
            </div>
        </div>
    </body>





</template>

<style scoped>
</style>