<div>
    <div class="card border">
        <div class="card-header bg-success text-light justify-content-center d-flex">
          <strong>Latest Article</strong>     
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($art as $a)
                <tr>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->judul_task }}</td>
                    <td>{{ $a->deskripsi_task }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    
</div>
