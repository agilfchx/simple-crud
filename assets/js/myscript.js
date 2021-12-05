const flashData = $('.flash-data').data('flashdata');
console.log(flashData);
if(flashData){
  Swal.fire({
    icon: 'success',
    title: 'Data mahasiswa ',
    text: ' berhasil ' + flashData
  })

$('.tombol-hapus').on('click', function(e){

  const href = $(this).attr('href');
  e.preventDefault();
  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "data mahasiswa akan dihapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Data'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })

});
}