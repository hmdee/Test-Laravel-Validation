<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    @error('name')
    <div class="error" style="color: red;">
        {{ $message }}
    </div>
@enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
