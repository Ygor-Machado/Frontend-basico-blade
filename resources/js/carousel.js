export default (images = []) => ({
    index: 0,
    images: images,
    changeImage(direction) {
        if (direction === 'previous') {
            if (this.index > 0) {
                this.$refs.highlight.src = this.$refs[`image${this.index-1}`].src
                this.index--
            } else {
                this.$refs.highlight.src = this.$refs[`image${this.images.length-1}`].src
                this.index = this.images.length-1
            }
        } else {
            if (this.index === this.images.length-1) {
                this.$refs.highlight.src = this.$refs[`image0`].src
                this.index = 0
            } else {
                this.$refs.highlight.src = this.$refs[`image${this.index+1}`].src
                this.index++
            }
        }
    },
    showImage(url) {
        this.$refs.highlight.src = url
    }
})
