$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
    console.log(e)
  })

