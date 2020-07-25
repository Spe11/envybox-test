<template>
    <div class="container">
        <div class="form">
            <div>
                <label for="name">Имя</label>
                <input id="name" type="text" v-model="name">
            </div>
            <div>
                <label for="phone">Телефон</label>
                <input id="phone" type="text" v-model="phone">
            </div>
            <div>
                <label for="message">Сообщение</label>
                <textarea id="message" v-model="message"></textarea>
            </div>
            <button @click="submit">Отправить</button>
        </div>

        <div class="errors">
            <div v-for="(error, i) in errors" :key="i">
                <div v-for="(e, i) in error" :key="i">
                    {{ e }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                phone: '',
                message: '',
                errors: [],
            };
        },
        methods: {
            submit() {
                this.errors = [];

                const data = new FormData;
                data.append('name', this.name);
                data.append('phone', this.phone);
                data.append('message', this.message);

                axios.post('/save', data).then((response) => {
                    alert('Сообщение отправлено');
                    this.name = this.phone = this.message = '';
                }).catch((error) => {
                    this.errors = error.response.data.errors;
                });
            }
        }
    }
</script>

<style scoped>
    .container {
        width: 300px;
        margin: 0 auto;
        margin-top: 300px;
    }

    .form div {
        display: flex;
        justify-content: space-between;
    }

    .errors {
        color: red;
    }
</style>