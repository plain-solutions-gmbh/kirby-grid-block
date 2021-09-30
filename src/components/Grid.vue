<template>
  <div class="k-block-type-grid" @dblclick="open">
    <k-layout-field
      :value="content.grid"
      v-bind="grid"
      :label="content.title"
      @input="update"
    />
  </div>
</template>

<script>
export default {
  computed: {
    grid() {
      return this.field("grid");
    },
  },
};
</script>
