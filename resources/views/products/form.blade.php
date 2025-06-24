<div class="grid grid-cols-1 gap-6">

    <div>
        <label for="kode_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kode Barang</label>
        <input type="text" name="kode_barang" id="kode_barang"
            value="{{ old('kode_barang', $product->kode_barang ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            required>
        @error('kode_barang')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="nama_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang"
            value="{{ old('nama_barang', $product->nama_barang ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            required>
        @error('nama_barang')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="merk" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Merk</label>
        <input type="text" name="merk" id="merk" value="{{ old('merk', $product->merk ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        @error('merk')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
        <input type="text" name="type" id="type" value="{{ old('type', $product->type ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        @error('type')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="harga_perolehan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga
            Perolehan</label>
        <input type="number" name="harga_perolehan" id="harga_perolehan" step="0.01"
            value="{{ old('harga_perolehan', $product->harga_perolehan ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            required>
        @error('harga_perolehan')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="mutasi_amal" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mutasi Asal
            (Amal)</label>
        <input type="text" name="mutasi_amal" id="mutasi_amal"
            value="{{ old('mutasi_amal', $product->mutasi_amal ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        @error('mutasi_amal')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="mutasi_tujuan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mutasi
            Tujuan</label>
        <input type="text" name="mutasi_tujuan" id="mutasi_tujuan"
            value="{{ old('mutasi_tujuan', $product->mutasi_tujuan ?? '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        @error('mutasi_tujuan')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="tgl_pindah" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal
            Pindah</label>
        <input type="date" name="tgl_pindah" id="tgl_pindah"
            value="{{ old('tgl_pindah', $product->tgl_pindah ? $product->tgl_pindah->format('Y-m-d') : '') }}"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            required>
        @error('tgl_pindah')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="keterangan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Keterangan</label>
        <textarea name="keterangan" id="keterangan" rows="3"
            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('keterangan', $product->keterangan ?? '') }}</textarea>
        @error('keterangan')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
