<template>
  <div v-if="show" style="display:flex; flex-direction:column; width:400px; background:#fff; border:solid 1px #ddd; border-radius:3px;">
    <div style="padding:10px; background:#eee;">Hello {{ userName }}</div>
    <div style="padding:10px;">
      <p>This is an example component. It will appear in all pages of admin footer.</p>
      <p>Edit all components in <code>src/main.js</code>.</p>
    </div>
    <div style="padding:10px; border-top:solid 1px #eee; text-align:right;">
      <button type="button" class="button" @click="show=false">Ok!</button>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      userName: {
        type: String,
        default: 'User',
      },
    },

    data() {
      return {
        show: true,
      };
    },
  };
</script>