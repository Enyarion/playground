#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import os
import pathlib


def generate_ui(file_in: str):
    assert isinstance(file_in, pathlib.Path)
    assert file_in.exists()
    file_out = file_in.with_suffix(".py")
    file_out = file_out.with_name(file_out.name[file_out.name.find('__') + 2:])
    file_out = file_out.with_name(file_out.name[0].upper() + file_out.name[1:])
    file_out = file_out.with_name(f'Ui_{file_out.name}')
    cmd = f'pyuic5 {file_in.absolute()} -o {file_out.absolute()}'
    print(cmd)
    return os.system(cmd)
