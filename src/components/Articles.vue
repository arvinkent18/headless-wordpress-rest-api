<template>
    <div class="card-expansion">
        <md-card v-for="article in articles" :key="article.id">
            <md-card-header>
                <div class="md-title" v-html="article.title.rendered"></div>
                <div class="md-subhead" v-html="article.date"></div>
            </md-card-header>

            <md-card-expand>
                <md-card-actions md-alignment="space-between">
                <md-card-expand-trigger>
                    <md-button>Read more</md-button>
                </md-card-expand-trigger>
                </md-card-actions>

                <md-card-expand-content>
                    <md-card-content v-html="article.content.rendered"></md-card-content>
                </md-card-expand-content>
            </md-card-expand>
        </md-card>
    </div>
</template>

<script>
    export default {
        name: 'Articles',
        data () {
            return {
                articles: []
            }
        },
        created() {
            this.$http.get('wp/v2/posts').then(response => {
                this.articles = response.data
                console.log(this.articles)
            }, error => {
                console.log(error)
            })
        }
    }
</script>
<style lang="scss" scoped>
  @import "~vue-material/dist/theme/engine";

  .card-expansion {
    height: 480px;
  }

  .md-card {
    width: 100%;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
    text-align: left !important;
  }

  @import "~vue-material/dist/theme/all";
</style>