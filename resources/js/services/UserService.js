import ApiService from "./ApiService";

export default {
  async register(form) {
    return ApiService.post("/register", form);
  },

  async login(form) {
    return ApiService.post("/login", form);
  },

  async logout() {
    return ApiService.post("/logout");
  },
};
