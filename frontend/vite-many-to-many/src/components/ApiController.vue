<script>
import axios from 'axios';
export default {
    name: 'ApiContent',
    data() {
        return {
            technologies: [],
        }
    },

    mounted() {
        axios.get('http://127.0.0.1:8000/api/v1/technologies')
            .then(res => {
                const data = res.data;
                this.technologies = data.technologies;
            })
            .catch(error => {
                console.error(error)
            })
    }

}
</script>

<template>
    <div class="container">
        <h1>Tecnologie:</h1>
        <div class="techno" v-for="technology in technologies">
            <h2>{{ technology.name }}</h2>
            <p>{{ technology.description }}</p>
        </div>
    </div>
</template>

<style scoped>
.container {
    text-align: center;
}

.techno {
    border: 1px solid #fff;
    width: 50%;
    margin: 0 auto 1rem;
    border-radius: 10px;
}
</style>
