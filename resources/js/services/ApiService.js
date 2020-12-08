import axios from "axios";

let ApiService = axios.create({
  baseURL: "http://localhost:8000/api"
});

ApiService.defaults.withCredentials = true;

export default ApiService;
