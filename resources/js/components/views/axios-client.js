import axios from 'axios';

const axiosService = axios.create({
    baseURL: import.meta.env.VITE_API_BASE_URL
});


const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
if (csrfTokenElement) {
    axiosService.defaults.headers.common['X-CSRF-TOKEN'] = csrfTokenElement.getAttribute('content');
}

axiosService.interceptors.request.use((config) => {
    const token = localStorage.getItem("token");
    config.headers.Authorization = `Bearer ${token}`;
    return config;
});

axiosService.interceptors.response.use(
    (response) => {
        return response;
    },
    (error) => {
        const { response } = error;
        if (response.status === 401) {
            localStorage.removeItem("token");
        }
        throw error;
    }
);

export default axiosService;