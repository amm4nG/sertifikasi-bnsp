<a href="#" class="btn btn-danger btn-sm mb-1 ajax-delete" data-url="{{ route('pegawai.destroy', $pegawai->id) }}"><i class="fas fa-trash"></i></a>
<a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm mb-1"><i class="fas fa-pen"></i></a>
<a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-secondary btn-sm mb-1"><i class="fas fa-eye"></i></a>