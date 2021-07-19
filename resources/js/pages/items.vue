<template>
  <div class="container">
    <div class="row">
      <h1>{{ $t('items') }}</h1>
    </div>
    <div class="row">
      <itemtable-component />
    </div>
  </div>
</template>

<script>
export default {
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('users') }
  }
}
</script>
