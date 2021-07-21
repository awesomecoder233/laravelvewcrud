<template>
  <div class="container">
      <add-component />
  </div>
</template>

<script>
export default {
  //middleware: 'auth',

  metaInfo () {
    return { title: this.$t('users') }
  }
}
</script>
