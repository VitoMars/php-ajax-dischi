Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
    url: "partials/server.php",
    genres: [],
    genreSelected: "",
    filteredGenre: [],
  },

  methods: {
    getGenre() {
      axios.get(this.url + "?genere=" + this.genreSelected).then((res) => {
        this.filteredGenre = res.data;
        for (let i = 0; i < res.data.length; i++) {
          !this.genres.includes(res.data[i].genre)
            ? this.genres.push(res.data[i].genre)
            : null;
        }
      });
    },
  },

  created() {
    this.getGenre();
  },
});
