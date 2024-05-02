<?php

namespace App\Livewire;

trait HandlesErrors
{
    public function handleErrors(callable $callback)
    {
        try {
            return $callback();
        } catch (\Throwable $th) {
            $this->dispatchNotification($th->getMessage(), 'Something went wrong', 'danger');
        }
    }

    public function dispatchNotification($message, $title, $type)
    {
        $this->dispatch('notification', $message, $title, $type);
    }
}
