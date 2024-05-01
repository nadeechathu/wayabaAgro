
<div class="sidebar">
  <h3 class="font-Asap font-22 pb-2 fw-bolder black-text"> Product Categories</h3>

  <select onChange="setSelectedCategory()" id="category-selector" class="form-select mb-3 border-0 rounded-0 font-15 font-Asap fw-normal text-dark change-select bg-white" aria-label="Default select example">
  
    @foreach ($categories as $category)


    <option value="{{ $category->id}}">{{ $category->category_name}}</option>

    @endforeach
  
  </select>

  <h3 class="font-Asap font-22 pb-2 fw-bolder black-text">Brands</h3>

  <select onChange="setSelectedBrand()" id="brand-selector" class="form-select mb-3 border-0 rounded-0 font-15 font-Asap fw-normal text-dark change-select bg-white" aria-label="Default select example">
    @foreach ($brands as $brand)


    <option value="{{ $brand->id}}">{{ $brand->brand_name}}</option>

    @endforeach
  </select>
</div>

  








