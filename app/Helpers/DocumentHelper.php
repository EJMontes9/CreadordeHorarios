<?php

namespace App\Helpers;

class DocumentHelper
{
    public static function getFileIcon($document)
    {
        $extension = pathinfo($document->link, PATHINFO_EXTENSION);
        switch ($extension) {
            case 'pdf':
                return '<i class="fa-solid fa-file-pdf" style="color: #990000;"></i>';
            case 'doc':
            case 'docx':
                return '<i class="fa-solid fa-file-word" style="color: #194694;"></i>';
            case 'xls':
            case 'xlsx':
                return '<i class="fa-solid fa-file-excel" style="color: #15660f;"></i>';
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'gif':
            case 'bmp':
                return '<i class="fa-solid fa-file-image" style="color: #105694;"></i>';
            case 'mp4':
            case 'avi':
            case 'mov':
            case 'wmv':
                return '<i class="fa-solid fa-file-video" style="color: #105694;"></i>';
            default:
                return '<i class="fa-solid fa-file"></i>';
        }
    }

    public static function getFolderItemCount($document)
    {
        return $document->children()->count();
    }
}