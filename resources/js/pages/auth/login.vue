<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card :title="$t('Input Admin Password')">
        <form @submit.prevent="login" @keydown="form.onKeydown($event)">

          <!-- Password -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('password') }}</label>
            <div class="col-md-7">
              <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" type="password" name="password">
              <has-error :form="form" field="password" />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-7 offset-md-3 d-flex">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                {{ $t('Check Password') }}
              </v-button>
            </div>
          </div>
        </form>
      </card>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import Cookies from 'js-cookie'
import LoginWithGithub from '~/components/LoginWithGithub'
export default {
  components: {
    LoginWithGithub
  },
  middleware: 'guest',
  metaInfo () {
    return { title: this.$t('login') }
  },
  data: () => ({
    form: new Form({
      password: ''
    }),
    remember: false
  }),
  methods: {
    async login () {
      // Submit the form.
      //const { data } = await this.form.post('/api/login')
      // Save the token.
      /*this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })*/
      // Fetch the user.
      /*await this.$store.dispatch('auth/fetchUser')*/
      // Redirect home.
      if(this.form.password == 'password'){
        this.redirect()
      } else if (this.form.password == ''){
          alert("Insert admin password!")
      } else {
        alert("Password is incorrect!")
      }
      
    },
    redirect () {
      /*const intendedUrl = Cookies.get('intended_url')
      if (intendedUrl) {
        Cookies.remove('intended_url')
        this.$router.push({ path: intendedUrl })
      } else {
        this.$router.push({ name: 'items' })
      }*/
      this.$router.push({ name: 'add' })
    }
  }
}
</script>