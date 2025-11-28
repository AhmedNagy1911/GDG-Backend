create table Users(
  id int primary key,
  username varchar(30) not null,
  email varchar(50) not null,
  Password varchar(50) not null

);
create table Artists(
  id int primary key,
  username varchar(30) not null,
  bio varchar(200)
);
create table Songs(
  id int primary key,
  title varchar(30) not null,
  duration int,
  release_date date,
  artist_id int,
  foreign key (artist_id) references Artists(id)
   on delete cascade 
   on update cascade
);
create table Playlist(
  id int primary key,
  name varchar(30) not null,
  create_at datetime not null,
  users_id int,
  foreign key (users_id) references Users(id)
   on delete cascade 
   on update cascade
);
create table playlist_song(
  song_id int ,
  playlist_id int,
  added_at datetime
  primary key(song_id,playlist_id),
  foreign key (song_id) references Songs(id)
  on delete cascade 
  on update cascade,
  foreign key (playlist_id) references Playlist(id)
  on delete cascade 
  on update cascade
);
create table follow(
  follow_date date ,
  users_id int,
  artist_id int,
  primary key (users_id,artist_id),
  foreign key (users_id) references Users(id)
  on delete cascade 
  on update cascade,
  foreign key (artist_id) references Artists(id)
  on delete cascade 
  on update cascade
);
create table favorite(
users_id int,
song_id int ,
primary key (users_id,song_id),
 foreign key (users_id) references Users(id)
  on delete cascade 
  on update cascade,
  foreign key (song_id) references Songs(id)
  on delete cascade 
  on update cascade
);
