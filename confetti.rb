# typed: false
# frozen_string_literal: true

# This file was generated by GoReleaser. DO NOT EDIT.
class Confetti < Formula
  desc ""
  homepage "https://confetti-cms.com"
  version "0.4.22"

  on_macos do
    url "https://github.com/confetti-cms/client/releases/download/0.4.22/client_0.4.22_darwin_all.tar.gz"
    sha256 "fff1f10b8a05ed2e94912c3dbec5561c65b4607a159256552f69bdfd0acd3fdc"

    def install
      main: confetti
      id: confetti
      binary: confetti
      bin.install "confetti"
    end
  end

  on_linux do
    if Hardware::CPU.arm? && Hardware::CPU.is_64_bit?
      url "https://github.com/confetti-cms/client/releases/download/0.4.22/client_0.4.22_linux_arm64.tar.gz"
      sha256 "0faf9d77e68671bae95d7f4b6ad95af29d4c9e0e049beb2c2fed1359d93d7076"

      def install
        main: confetti
        id: confetti
        binary: confetti
        bin.install "confetti"
      end
    end
    if Hardware::CPU.intel?
      url "https://github.com/confetti-cms/client/releases/download/0.4.22/client_0.4.22_linux_amd64.tar.gz"
      sha256 "1defa67d8863f7f6771820313f6f7dbf613a3a13a1cbe19f9862f34c6f170d52"

      def install
        main: confetti
        id: confetti
        binary: confetti
        bin.install "confetti"
      end
    end
  end
end
