require 'active_record'
require 'mysql2'

ActiveRecord::Base.establish_connection(
  :adapter  => "mysql2",
  :host     => "127.0.0.1",
  :username => "root",
  :password => "mein-passwort",
  :database => "mnb"
)

class Show < ActiveRecord::Base
  has_many :track_listings
  def compiled_listing_of_tracks
    TrackListing.where(:show_id => self.id).map do |track|
      track.to_s
    end.join("\n")
  end
end

class TrackListing < ActiveRecord::Base
  belongs_to :show
  attr_accessible :title, :artist
  def to_s
    "#{self.title} - #{self.artist}"
  end
end

puts "ALTER TABLE `shows` MODIFY COLUMN `text` TEXT NOT NULL AFTER `name`;"
Show.all.each do |show|
  puts "UPDATE shows SET text=\"#{show.compiled_listing_of_tracks}\" WHERE id=#{show.id};"
end