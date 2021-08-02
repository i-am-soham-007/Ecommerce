
<div class="col-lg-6 col-sm-6 col-md-6">
    <div class="mb-3">
        <label class="form-label">Select Category Level </label>
        <select class="select2" name="parent_id" id="parent_id">
            <option value="0" @if(!empty($categorydata['parent_id']) && $categorydata['parent_id'] == 0) 
            selected="" @endif>Main Category</option>
            @if(!empty($getCategories))
                @foreach($getCategories as $category)
                    <option value="{{ $category['id'] }}" @if(!empty($categorydata['parent_id']) && $categorydata['parent_id'] == $category['id']) 
                    selected="" @endif>{{ $category['category_name'] }}</option>
                    @if(!empty($category['subcategory']))
                        @foreach($category['subcategory'] as $subcatelist)
                            <option value="{{ $subcatelist['id'] }}">&nbsp;&raquo;&nbsp;{{ $subcatelist['category_name'] }}</option>
                        @endforeach
                    @endif
                @endforeach
            @endif
        </select>
    </div>
</div>
