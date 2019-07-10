<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser">{{ msg }}</button>
    </div>
</template>

<script>
    export default {
        props: ['userId','follows'],
        data() {
            return {
                status: this.follows,
            }
        },
        computed: {
            msg: function() {
                return this.status ? 'Unfollow' : 'Follow';
            }
        },
        methods: {
            followUser() {
                axios.post(`/follow/${this.userId}`)
                     .then(response => {
                         this.status = !this.status;
                     })
                     .catch(err => {
                         if (err.response.status == 401) {
                             window.location = '/login';
                         }
                     });
            }
        }
    }
</script>
