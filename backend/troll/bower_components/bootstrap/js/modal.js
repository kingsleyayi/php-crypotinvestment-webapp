var Modal = function (element, options) {
  this.options        = options
  this.$body          = $(document.body)
  this.$element       = $(element)
  this.$backdrop      =
  this.isShown        = null
  this.scrollbarWidth = 0

  if (this.options.remote) {
    this.$element
      .find('.modal-content')
      .load(this.options.remote, $.proxy(function () {
        this.$element.trigger('loaded.bs.modal')
      }, this))
  }
}