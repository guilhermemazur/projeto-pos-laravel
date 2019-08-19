@csrf

<div class="form-group">
  <label for="model">Modelo</label>
  <input type="model" name="model" class="form-control {{ has_error('model', 'has-danger') }}" id="model" placeholder="Modelo do carro" value="{{old('model') ?? $car->model ?? ''}}">
  @errorblock('model')
</div>

<div class="form-group">
  <label for="year">Ano</label>
  <input type="year" name="year" class="form-control {{ has_error('year', 'has-danger') }}" id="year" placeholder="Digite o ano do carro" value="{{old('year') ?? $car->year ?? ''}}">
  @errorblock('year')
</div>

<div class="form-group">
  <label for="car_brand_id">Marca</label>
  <select id="car_brand_id" name="car_brand_id" class="form-control {{ has_error_class('car_brand_id') }}">
      <option value=""> @lang('labels.common.select') </option>
      @foreach($car_brands as $car_brand)
          <option value="{{ $car_brand->id }}" {{ (old('car_brand', $car->car_brand_id ?? '')) == $car_brand->id ? 'selected' : '' }}>
              {{ $car_brand->brand }}
          </option>
      @endforeach
  </select>
  @errorblock('car_brand_id')
</div>

