<script>
import axios from 'axios';
export default {
    name: 'ApiContent',
    data() {
        return {
            technologies: [],
            active: false,
            newTechnology: {
                name: 'Nome Tecnologia',
                description: 'Descrizione Tecnologia',
            }
        }
    },
    methods: {
        hideTechno() {
            this.active = true
        },

        createNewTechnology() {
            axios.post('http://127.0.0.1:8000/api/v1/technologies', this.newTechnology)
                .then(res => {
                    const data = res.data;

                    this.technologies.push(data.technology);
                    this.active = false;
                })
                .catch(err => {
                    console.error(err)
                })
        }
    },

    mounted() {
        axios.get('http://127.0.0.1:8000/api/v1/technologies')
            .then(res => {
                const data = res.data;
                this.technologies = data.technologies;
            })
            .catch(err => {
                console.error(err)
            })
    }

}
</script>

<template>
    <div class="container">
        <h1>Tecnologie:</h1>
        <div class="form" v-if="active">
            <form @submit.prevent="createNewTechnology">
                <div class="name">
                    <div class="label">
                        <label for="name">Nome:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="name" id="name" v-model="newTechnology.name">
                    </div>
                </div>
                <div class="description">
                    <div class="label">
                        <label for="description">Descrizione</label>
                    </div>
                    <div class="input">
                        <textarea name="description" id="description" cols="30" rows="5"
                            v-model="newTechnology.description"></textarea>
                    </div>
                </div>
                <input type="submit" value="Crea">
            </form>
        </div>

        <div class="technologies" v-else>
            <button @click="hideTechno">Aggiungi una tecnologia</button>
            <div class="techno" v-for="technology in technologies">
                <h2>{{ technology.name }}</h2>
                <p>{{ technology.description }}</p>
            </div>
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

form>div {
    display: flex;
    width: 50%;
    margin: 0 auto .75rem;
}

.label {
    width: 40%;
}

.input {
    width: 60%;
    display: flex;
}
</style>
