<template>
    <div>
        <div class="container d-flex flex-column justify-content-between vh-100" >
            <div class="row justify-content-center mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <router-link to="/" :title="app_subtitle" exact>
                                    <svg
                                        class="brand-icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid"
                                        width="30"
                                        height="33"
                                        viewBox="0 0 30 33"
                                    >
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                class="logo-fill-blue"
                                                fill="#7DBCFF"
                                                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                                            />
                                            <path
                                                class="logo-fill-white"
                                                fill="#FFF"
                                                d="M11 4v25l8 4V0z"
                                            />
                                        </g>
                                    </svg>
                                    <span class="brand-name">{{
                                        app_title
                                    }}</span>
                                </router-link>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <h4 class="text-dark mb-5">Sign In</h4>

                            <!-- <form @submit.prevent="submit"> -->

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        placeholder="ID"
                                        v-model.trim="$v.form.id.$model"
                                        autofocus
                                        required
                                    />
                                    <!-- <div class="error col-md-12 invalid-feedback" v-if="!$v.id.required"><span>ID is required</span></div> -->
                                    <div class="error" v-if="!$v.form.id.required">ID is required.</div>
                                    <div class="error" v-if="!$v.form.id.minLength">ID must have at least {{$v.form.id.$params.minLength.min}} characters.</div>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="password"
                                        class="form-control input-lg"
                                        placeholder="Password"
                                        v-model.trim="$v.form.password.$model"
                                    />
                                    <div class="error" v-if="!$v.form.password.required">Password is required</div>
                                </div>
                                <!-- <div class="form-group" :class="{ 'form-group--error': $v.name.$error }">
                                    <label class="form__label">Name</label>
                                    <input class="form__input" v-model.trim="$v.name.$model"/>
                                </div>
                                <div class="error" v-if="!$v.name.required">Name is required</div>
                                <div class="error" v-if="!$v.name.minLength">Name must have at least {{$v.name.$params.minLength.min}} letters.</div> -->

                                <div class="col-md-12">
                                    <button
                                        @click.prevent="submit"
                                        type="submit"
                                        class="btn btn-lg btn-primary btn-block mb-4"
                                        :disabled="submitStatus === 'PENDING'"
                                    >
                                        Let Me In
                                    </button>
                                </div>
                                <!-- <button class="button" type="submit" :disabled="submitStatus === 'PENDING'">Submit!</button> -->
                                <p class="typo__p" v-if="submitStatus === 'OK'">Thank you!</p>
                                <p class="typo__p" v-if="submitStatus === 'ERROR'">Please fill the form correctly.</p>
                                <p class="typo__p" v-if="submitStatus === 'PENDING'">Sending...</p>
                            </div>
                            <!-- </form> -->

                            <!-- <form action="/index.html"> -->
                            <!-- <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        id="id"
                                        name="id"
                                        placeholder="ID Number"
                                        v-model="form.id"
                                        @input="set_id($event.target.value)"
                                        autofocus
                                    />
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input
                                        type="password"
                                        class="form-control input-lg"
                                        id="password"
                                        name="password"
                                        placeholder="Password"
                                        v-model="form.password"
                                        @change="set_password($event.target.value)"
                                    />
                                    <div class="error" v-if="!$v.password.required">Password is required</div>
                                    <div class="error" v-if="!$v.password.minLength">Password must have at least {{$v.password.$params.minLength.min}} characters.</div>
                                </div>


                                <div class="col-md-12">
                                    <button
                                        @click.prevent="login"
                                        type="submit"
                                        class="btn btn-lg btn-primary btn-block mb-4"
                                    >
                                        Let Me In
                                    </button>
                                </div>
                            </div> -->
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pl-0">
                <p class="text-center">
                    &copy; 2020 Copyright {{ app_subtitle }} by
                    <a class="text-primary" href="#" target="_blank">Shovon</a>.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import { required, minLength } from 'vuelidate/lib/validators';

export default {
    data() {
        return {
            submitStatus: null,

            form: {
                id: "",
                password: ""
            },
            errors: [],
            app_title: process.env.MIX_APP_TITLE,
            app_subtitle: process.env.MIX_APP_SUBTITLE,
        }
    },
    validations: {
        form: {
            id: {
                required,
                minLength: minLength(8),
            },
            password: {
                required,
            },
        }
    },

    methods: {
        submit() {
            // console.log('submit!')
            this.$v.$touch()
            if (this.$v.$invalid) {
                this.submitStatus = 'ERROR'
            } else {
                this.submitStatus = 'PENDING'
                setTimeout(() => {
                    // this.axios.post('/api/login', this.form)
                    // .then(function (response) {
                    //     this.submitStatus = 'OK';
                    //     console.log(response);
                    // })
                    // .catch(function (error) {
                    //     console.log(error);
                    //     this.submitStatus = 'ERROR';
                    //     this.errors = error.response.data.errors;
                    // });
                    this.axios.post("/api/login", this.form)
                    .then((response) => {
                        this.submitStatus = 'OK'
                        this.$router.push({ name: "home" });
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.submitStatus = 'ERROR';
                        this.errors = error.response.data.errors;
                        // console.clear();
                    });
                }, 500)
            }
        },
        // login() {
        //     this.axios.post("/api/login", this.form)
        //     .then(() => {
        //         this.$router.push({ name: "home" });
        //     })
        //     .catch(error => {
        //         this.errors = error.response.data.errors;
        //     });
        // },
    },
    mounted() {
        // this.app_subtitle = process.env.MIX_APP_SUBTITLE,
        // this.app_title = process.env.MIX_APP_TITLE,
        // console.log('process.env.MIX_APP_SUBTITLE')
    },
}
</script>
