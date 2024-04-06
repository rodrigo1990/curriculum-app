<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      This is a project of a dinamic curriculum maker
    </p>
    <ul>
      <li>On first place is gonna be a simple currricum developed with VueJS</li>
      <li>On second place is gonna allow to add content dinamically with an admin panel probably developed in ReactJs</li>
      <li>The selection of multiple templates is gonna be also a feature of this project</li>
      <li>Last step and ¿conclusion? of this project is gonna an admin panel to have a general overview of all users and curriculums registered on this app</li>
      <li>If a good feedback is received I will allow to receive a donation to colaborate with social causes and for my own subsistence</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: block;
  margin-top: 10px;;
}
a {
  color: #42b983;
}
</style>
