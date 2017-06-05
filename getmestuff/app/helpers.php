<?php

function flash ($message) {
    session()->flash('message', $message);
}

function error ($message) {
    session()->flash('error', $message);
}