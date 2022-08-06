import { defineStore } from 'pinia'
import { BASE_URL } from "../base_url";
import router from '../router';

export const useReportStore = defineStore({
  id: 'report',
  state: () => ({
    baseUrl: BASE_URL,
    isLogin: false,
    displayEmail: "",
    reportFetched: [],
    myReport: []
  }),
  actions: {

    async fetchData() {
      try {
        let response = await axios({
          method: `GET`,
          url: this.baseUrl + `api/patients`
        })
        console.log(response)
        this.reportFetched = response.data.result.data

      } catch (err) {
        console.log(err)
        swal({
          title: "Error " + err.response.data.statusCode,
          text: err.response.data.error.message,
        });
        localStorage.clear

      }
    },
    async createHandler(data) {
      try {


        let resp = await axios.post(BASE_URL + `api/patients`, data);
        router.push(`/`)

        // await this.fetchData()
        swal("Patient Created!");
      } catch (err) {
        console.log(err);
        swal(`There's an Error occured`)
        // swal({
        //   title: "Error " + err.response.data.statusCode,
        //   text: err.response.data.error.message,
        // });
      }
    },
    async editHandler(data, id) {
      try {
        console.log(data, `<<`)


        let resp = await axios.put(BASE_URL + `api/patients/${id}`, data);

        // await this.fetchData()
        router.push(`/`)

        swal("Success editing patient!");
      } catch (err) {
        console.log(err);
        swal(`There's an Error occured`)
        // swal({
        //   title: "Error " + err.response.data.statusCode,
        //   text: err.response.data.error.message,
        // });
      }
    },

    async deleteHandler(id) {
      try {
        console.log('handler')
        let resp = await axios.delete(BASE_URL + `api/patients/${id}`);

        await this.fetchData()

        console.log("Patient deleted successfully!");
        swal("Patient deleted successfully!");
      } catch (err) {
        console.log(err);
        swal(`There's an Error occured`)
        // swal({
        //   title: "Error " + err.response.data.statusCode,
        //   text: err.response.data.error.message,
        // });
      }
    }
  }
})
