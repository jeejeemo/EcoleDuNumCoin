<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 11/01/2018
 * Time: 15:53
 */
{{ Form::open(array('url'=>'thanks')) }}
{{Form::label('email','Email Address')}}
{{Form::text('email')}}
{{Form::label('os','Operating System')}}
{{Form::select('os',array(
    'linux'=>'Linux',
    'mac'=>'MAC OS X',
    'windows' => 'Windows'
)) }}

{{Form::label('comment','Comments')}}
{{Form::textarea('comment','',array('placeholder'=>'What are you interests?'))}}

{{Form::checkbox('agree','yes',false)}}
{{Form::label('agree','I agree to your terms of service')}}
{{Form::submit('Sign up')}}
{{ Form::close() }}
