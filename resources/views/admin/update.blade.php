<form action="{{ url('/tugas/update/' . $detailTugas->id) }}" method="post">
    @csrf
    @method('PUT')
    <!-- ID readonly -->
    <label for="id">ID</label>
    <input type="text" name="id" id="id" value="{{ old('id', $detailTugas->id) }}" readonly />

    <!-- Task Name -->
    <label for="tugas">Nama Tugas</label>
    <input type="text" name="tugas" id="tugas" value="{{ old('tugas', $detailTugas->tugas) }}" required />
    @error('tugas')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- Start Time -->
    <label for="waktu_mulai">Waktu Mulai</label>
    <input 
        type="datetime-local" 
        name="waktu_mulai" 
        id="waktu_mulai"
        value="{{ old('waktu_mulai', $detailTugas->waktu_mulai ? \Carbon\Carbon::parse($detailTugas->waktu_mulai)->format('Y-m-d\TH:i') : '') }}" 
        required 
    />
    @error('waktu_mulai')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- End Time -->
    <label for="waktu_selesai">Waktu Selesai</label>
    <input 
        type="datetime-local" 
        name="waktu_selesai" 
        id="waktu_selesai"
        value="{{ old('waktu_selesai', $detailTugas->waktu_selesai ? \Carbon\Carbon::parse($detailTugas->waktu_selesai)->format('Y-m-d\TH:i') : '') }}" 
        required 
    />
    @error('waktu_selesai')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- Task From -->
    <label for="tugas_dari">Tugas Dari</label>
    <input type="text" name="tugas_dari" id="tugas_dari" value="{{ old('tugas_dari', $detailTugas->tugas_dari) }}" />
    @error('tugas_dari')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- Task To -->
    <label for="tugas_untuk">Tugas Untuk</label>
    <input type="text" name="tugas_untuk" id="tugas_untuk" value="{{ old('tugas_untuk', $detailTugas->tugas_untuk) }}" />
    @error('tugas_untuk')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- Keterangan / Status -->
    <label for="keterangan">Keterangan</label>
    <select name="keterangan" id="keterangan" required>
        <option value="Dikerjakan" {{ old('keterangan', $detailTugas->keterangan) == 'Dikerjakan' ? 'selected' : '' }}>Dikerjakan</option>
        <option value="Selesai" {{ old('keterangan', $detailTugas->keterangan) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
    </select>
    @error('keterangan')
        <div class="error-text">{{ $message }}</div>
    @enderror

    <!-- Optional Notes -->
    <label for="notes">Catatan (Opsional)</label>
    <textarea name="notes" id="notes" placeholder="Tambahkan catatan tambahan jika diperlukan...">{{ old('notes', $detailTugas->notes ?? '') }}</textarea>

    <button type="submit">Update Tugas</button>
</form>