<x-app-layout>
    <x-card>
        <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                    class="mt-1 block w-full rounded-md border-gray-300">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kode Produk</label>
                <input type="text" name="code" value="{{ old('code', $product->code) }}"
                    class="mt-1 block w-full rounded-md border-gray-300">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category_id" class="mt-1 block w-full rounded-md border-gray-300">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Satuan</label>
                <input type="text" name="unit" value="{{ old('unit', $product->unit) }}"
                    class="mt-1 block w-full rounded-md border-gray-300">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}"
                    class="mt-1 block w-full rounded-md border-gray-300">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                    class="mt-1 block w-full rounded-md border-gray-300">
            </div>
            <!-- field lain mengikuti pola yang sama -->
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Simpan Perubahan</button>
        </form>
    </x-card>
</x-app-layout>
