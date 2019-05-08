#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import pathlib
import sys

from PyQt5 import QtWidgets

import utils
from MainWindow import MainWindow


def main(args):
    # https://stackoverflow.com/a/43039363
    def exception_hook(exctype, value, traceback):
        # Print the error and traceback
        print(exctype, value, traceback, file=sys.stderr)
        # Call the normal Exception hook after
        # noinspection PyUnresolvedReferences,PyProtectedMember
        sys._excepthook(exctype, value, traceback)
        sys.exit(1)

    # Back up the reference to the exceptionhook
    sys._excepthook = sys.excepthook

    # Set the exception hook to our wrapping function
    sys.excepthook = exception_hook

    app = QtWidgets.QApplication(args)
    window = MainWindow()
    window.show()

    try:
        return app.exec_()
    except Exception:
        raise


if __name__ == '__main__':
    for file in [
        'file_hunter__mainWindow.ui'
    ]:
        utils.generate_ui(pathlib.Path(file))

    sys.exit(main(sys.argv))
