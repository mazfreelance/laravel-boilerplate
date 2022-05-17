<?php

namespace Infrastructure\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

abstract class BaseResourceCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'records' => $this->collection,
            'pagination' => [
                'current_page' => $this->currentPage(),
                'last_page' => $this->lastPage(),
                'total_record' => $this->total(),
                'page_size' => $this->perPage(),
                'has_more_page' => $this->hasMorePages(),
            ]
        ];
    }
}
